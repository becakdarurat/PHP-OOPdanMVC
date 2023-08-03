// artinya ketika documentnya sudah siap jalankan fungsi didalamnnya karena menggantikan sebuah method yang namanya ready
$(function(){

    $('.tombolTambahData').on('click',function(){

        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');

        $('#nama').val('');
        $('#nrp').val('');
        $('#email').val('');

    });


    // artinya jquery carikan saya class tampilModalUbah , lalu ketika di click , jalankan fungsi di bawah ini 
    $('.tampilModalUbah').on('click',function(){
        
        // Cari id formModalLabel , lalu ubah isinya jadi ubah Data Mahasiswa
        $('#formModalLabel').html('Ubah Data Mahasiswa');
        // ini adalah CSS selector , cari button type submit lalu ubah nilainya
        $('.modal-footer button[type=submit]').html('Ubah Data');
        // cari .modal body yang didalamnya form , ubah attribute actionnya jadi http://localhost
        $('.modal-body form').attr('action','http://localhost/oophp/phpmvc/public/Mahasiswa/ubah');


        const id = $(this).data('id'); //this berarti tombol ubah yang kita click , lalu kita dapatkan id attributenya pakai jquery
       
        $.ajax({
            url: 'http://localhost/oophp/phpmvc/public/Mahasiswa/getubah',
    // id sebelah kiri nama data yang dikirimkan, id sebelah kanan isinya
            data: {id : id},
        // id yang dikirimkan ditangkap pakai method apa ? post or get? kita pakai post
            method: 'post',
        // adalah type datanya mau seperti apa? 
            dataType: 'json',
            // apabila permintaan urlnya berhasil maka akan ada data yang dikembalikan, dan itu masuk ke parameter data success
            success: function(data){
                // cari id nama, ubah valuenya dengan object json yang sudah kita dapatkan dari getubah , kalau di JAVASCRIPT data.nama sedangkan php data->nama ngambil objectnya

                $('#nama').val(data.nama);
                $('#nrp').val(data.nrp);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
                
            }
        });
        
    });

});