var API_URL = '/api/permintaan';

/* ===== Tab pelatihan ===== */
var P=[["Dasar tugas pengamanan, patroli, dan pelaporan kejadian.","Pengendalian akses dan tamu di area pabrik atau kantor.","Sikap melayani dan penanganan situasi darurat."],["Teknik pembersihan lantai, kaca, dan sanitasi.","Penggunaan bahan kimia dan alat dengan aman.","Standar kebersihan area kantor dan pabrik."],["Keselamatan kerja (K3) di lingkungan produksi.","Pengoperasian alat sesuai prosedur.","Pencatatan hasil kerja dan pengecekan kualitas."]];
var tabs=document.querySelectorAll('.tabs button'),pn=document.getElementById('pn');
function show(i){
    pn.innerHTML='<ul style="margin:0;padding-left:20px">'+P[i].map(function(t){return'<li>'+t+'</li>'}).join('')+'</ul>';
    tabs.forEach(function(b,j){b.setAttribute('aria-selected',j==i)});
}
tabs.forEach(function(b){b.addEventListener('click',function(){show(+b.dataset.k)})});
show(0);

/* ===== Form permintaan ===== */
var d=document.getElementById('d');d.min=new Date().toISOString().slice(0,10);
document.getElementById('f').addEventListener('submit',function(ev){
    ev.preventDefault();
    var c=document.getElementById('c').value.trim(),
        w=document.getElementById('w').value.trim(),
        n=+document.getElementById('n').value,
        svc=document.getElementById('svc').value,
        e=document.getElementById('e'),
        ok=document.getElementById('ok'),
        btn=document.querySelector('button.cta');
    ok.style.display='none';
    if(!c||!w||n<1){e.textContent='Lengkapi nama perusahaan, kontak, dan jumlah personel (minimal 1).';return}
    e.textContent='';
    btn.disabled=true;var label=btn.textContent;btn.textContent='Mengirim...';
    fetch(API_URL,{
        method:'POST',
        headers:{'Content-Type':'application/json','Accept':'application/json'},
        body:JSON.stringify({layanan:svc,jumlah:n,tanggal:d.value||null,perusahaan:c,kontak:w})
    }).then(function(r){
        return r.json().catch(function(){return {}}).then(function(j){
            if(!r.ok) throw {status:r.status,body:j};
            return j;
        });
    }).then(function(j){
        ok.textContent='Permintaan terkirim, kode '+j.kode+'. '+n+' personel untuk '+svc+'. Kami menghubungi '+w+' untuk penawaran.';
        ok.style.display='block';
        document.getElementById('f').reset();d.min=new Date().toISOString().slice(0,10);
    }).catch(function(err){
        e.textContent = err.status===429 ? 'Terlalu banyak permintaan. Coba lagi sebentar.'
                      : err.status===422 ? 'Data belum valid. Periksa kembali isian Anda.'
                      : 'Gagal mengirim permintaan. Coba lagi sebentar.';
        console.error(err);
    }).then(function(){
        btn.disabled=false;btn.textContent=label;
    });
});