<div class="row">

        <div class=" d-flex justify-content-end p-3">
        <input class="text-center fw-bold rounded-2 me-5 " type="search" name="" id="" placeholder="--  filter  --">
        <button type="button" class="btn btn-primary me-3" data-bs-toggle="modal" data-bs-target="#input">input</button>
        <button type="button" class="btn btn-primary me-3" data-bs-toggle="modal" data-bs-target="#">print edaran</button>
        <div class=" btn btn-danger me-2">print to xlsx</div>

        </div>



<!-- input -->
<div class="modal fade" id="input" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">INPUT DATA SANTRI</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>


      <!-- start form -->
    <form action="<?= BASEURL;?>/Data_santri/input" method="post">
      <div class="modal-body">
            <div class="row ">
                <div class="col">
                    <div class="mb-3 ">
                        <label for="nama"  class="form-label fw-bold">NAMA</label>
                        <input type="text" class="form-control text-center" id="nama" name="nama" placeholder="--   masukan nama  --">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="nis"  class="form-label text-center fw-bold">NIS</label>
                        <input type="number" class="form-control text-center" id="nis" name="nis" placeholder="--   masukan nis  --">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col"><p class="fw-bold">MARHALAH</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="marhalah" id="i'dad" value="i'dad">
                        <label class="form-check-label" for="#i'dad">
                            I'DAD
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="marhalah" id="mutawassit" value="mutawassit">
                        <label class="form-check-label" for="#mutawassit">
                            MUTAWASSIT
                        </label>
                    </div>
                </div>
                <div class="col"><p class="fw-bold">KELAS</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kelas" id="1" value="1">
                        <label class="form-check-label" for="#1">
                            1
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kelas" id="2" value="2">
                        <label class="form-check-label" for="2">
                            2
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kelas" id="3" value="3">
                        <label class="form-check-label" for="#3">
                            3
                        </label>
                    </div>
                </div>
                <div class="col"><p class="fw-bold">RUANG</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="ruang" id="A" value="A">
                        <label class="form-check-label" for="#A">
                            A
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="ruang" id="B" value="B">
                        <label class="form-check-label" for="B">
                            B
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="ruang" id="C" value="C">
                        <label class="form-check-label" for="#C">
                            C
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="ruang" id="D" value="D">
                        <label class="form-check-label" for="#D">
                            D
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col"><p class="fw-bold">KAMAR</p>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="kamar">
                        <option value="1 Formal">1 Formal</option>
                        <option value="2 Formal">2 Formal</option>
                        <option value="3 Formal">3 Formal</option>
                        <option value="4 Formal">4 Formal</option>
                        <option value="5 Formal">5 Formal</option>
                        <option value="6 Formal">6 Formal</option>
                        <option value="7 Formal">7 Formal</option>
                        <option value="8 Formal">8 Formal</option>
                        <option value="9 Formal">9 Formal</option>
                        <option value="10 Formal">10 Formal</option>
                    </select>                   
                </div>
            </div>

         
        </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
    </form> 
    <!-- end form -->









    </div>
  </div>
</div>



<div class="">
    <div class="row overflow-auto">
        <table id="tabel-data" class="table align-middle table table-striped border-hover table-bordered fw-bold" style="font-size: 13px;" cellspacing="0">
            <tr class="text-center text-nowrap " >
                <td class="bg-success" rowspan="2">EDIT</td>
                <td class="bg-success" rowspan="2">NIS</td>
                <td class="bg-success" rowspan="2">NAMA</td>
                <td class="bg-success" rowspan="2">KELAS</td>
                <td class="bg-success" rowspan="2">KAMAR</td>
                <td class="bg-danger" colspan="12">SPP</td>
                <td class="bg-danger"  colspan="12">KOST MAKAN</td>
                <td class="bg-success" rowspan="2">IMTIHAN SEM 1</td>
                <td class="bg-success" rowspan="2">IMTIHAN SEM 2</td>
                <td class="bg-success" rowspan="2">UJIAN</td>
                <td class="bg-success" rowspan="2">HAFLAH</td>
                <td class="bg-success" rowspan="2">WISUDA</td>
                <td class="bg-success" rowspan="2">FISMA</td>
            </tr>
            <tr class="bg-warning">
                <td>JANUARI</td>
                <td>FEBRUARI</td>
                <td>MARET</td>
                <td>APRIL</td>
                <td>MEI</td>
                <td>JUNI</td>
                <td>JULI</td>
                <td>AGUSTUS</td>
                <td>SEPTEMBER</td>
                <td>OKTOBER</td>
                <td>NOVEMBER</td>
                <td>DESEMBER</td>
                <td>JANUARI</td>
                <td>FEBRUARI</td>
                <td>MARET</td>
                <td>APRIL</td>
                <td>MEI</td>
                <td>JUNI</td>
                <td>JULI</td>
                <td>AGUSTUS</td>
                <td>SEPTEMBER</td>
                <td>OKTOBER</td>
                <td>NOVEMBER</td>
                <td>DESEMBER</td>
            </tr>
            <?php foreach ($data['DataSantri'] as $str) : ?>
                <tr class="text-nowrap">
                    <td><button type="button" class="btn btn-primary p-0 m-0" data-bs-toggle="modal" data-bs-target="#edit">edit</button></td>
                    <td><?= $str['nis'];?></td>
                    <td><?= $str['nama'];?></td>
                    
                    <td><?= $str['kelas'] . ' ' . $str['marhalah'] . ' ' . $str['ruang'] ;?></td>
                    <td><?= $str['kamar'];?></td>
                    <td><?= $str['spp_januari'];?></td>
                    <td><?= $str['spp_februari'];?></td>
                    <td><?= $str['spp_maret'];?></td>
                    <td><?= $str['spp_april'];?></td>
                    <td><?= $str['spp_mei'];?></td>
                    <td><?= $str['spp_juni'];?></td>
                    <td><?= $str['spp_juli'];?></td>
                    <td><?= $str['spp_agustus'];?></td>
                    <td><?= $str['spp_september'];?></td>
                    <td><?= $str['spp_oktober'];?></td>
                    <td><?= $str['spp_november'];?></td>
                    <td><?= $str['spp_desember'];?></td>
                    <td><?= $str['kost_januari'];?></td>
                    <td><?= $str['kost_februari'];?></td>
                    <td><?= $str['kost_maret'];?></td>
                    <td><?= $str['kost_april'];?></td>
                    <td><?= $str['kost_mei'];?></td>
                    <td><?= $str['kost_juni'];?></td>
                    <td><?= $str['kost_juli'];?></td>
                    <td><?= $str['kost_agustus'];?></td>
                    <td><?= $str['kost_september'];?></td>
                    <td><?= $str['kost_oktober'];?></td>
                    <td><?= $str['kost_november'];?></td>
                    <td><?= $str['kost_desember'];?></td>
                    <td><?= $str['imtihan_sem_1'];?></td>
                    <td><?= $str['imtihan_sem_2'];?></td>
                    <td><?= $str['ujian'];?></td>
                    <td><?= $str['haflah'];?></td>
                    <td><?= $str['wisuda'];?></td>
                    <td><?= $str['fisma'];?></td>
                </tr>
            <?php endforeach ;?>
    </div>
</div>
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PIKIRKAN SEBELUM BERTINDAK!!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>


      <!-- start form -->
    <form action="<?= BASEURL;?>/Data_santri/hapus" method="post">
      <div class="modal-body">
            
         <div class=" d-flex justify-content-evenly p-3">

            <a href="<?= BASEURL;?>/Membayar/detail/<?= $str['id'] ;?>"><button type="button" class="btn btn-primary me-3 ubahModal" data-bs-toggle="modal" data-bs-target="">EDIT</button></a>
            <a href="<?= BASEURL;?>/Data_santri/hapus/<?= $str['id']; ?>"><button type="button" class="btn btn-danger me-3" data-bs-toggle="modal" data-bs-target="">HAPUS</button></a>

        </div>
         
        </div>
         <div class="modal-footer">

        </div>

</div>