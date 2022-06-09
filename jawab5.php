<?php
                                        $get= mysqli_query($koneksi,
                                        "SELECT * FROM detail_pesanan p, produk pr WHERE p.id_produk=pr.id_produk AND id_pesanan='$idp'AND id_pelanggan");
                                        $i=1;
                                        while($ps = mysqli_fetch_arry($get))
                                        $idp = $ps['id_produk'];
                                        $iddetail = $ps['id_detailpesanan'];
                                        $idp = $ps['id_pesanan'];
                                        $qty = $ps['qty'];
                                        $harga = $ps['harga'];
                                        $namaproduk = $ps['nama_produk'];
                                        $deskripsi = $ps['deskripsi'];
                                        $subtotal = $qty*$harga;
                                            ?> 
                                            <td><?= $i++?></td>
                                            <td><?= $nama_produk;?>(<? $deskipsi;?>)</td>
                                            <td><?= $harga;?></td>
                                            <td><?= $qty;?></td>
                                            <td><?= $subtotal;?></td>
                                            <td>edit <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delet<?= $idpr;?>">
                                            delet
                                </button></td>
                                        