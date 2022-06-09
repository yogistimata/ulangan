</thead>
                                    <?$getpelanggan = mysqli_query($koneksi,"SELECT * FROM pelanggan"); 
                                     $i = 1;
                                    while($pl = mysqli_fetch_arry('getpelanggan')){
                                    $id_pelanggan =$_pl['id_pelanggan'];
                                    $nama_pelanggan =$_pl['nama_pelanggan'];
                                    $notelep =$_pl['notelep'];
                                    $alamat =$_pl['alamat'];
                                   
                                    ?>