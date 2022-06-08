    <div class="container-fluid  mt-3 position-relative shadow">
      <div class="row">
        <div class="col">

          <div class="card p-0 mt-2 shadow-sm" style="background-color:  #e4e6e7;">
            <p class="ps-3 mt-1 mb-1 fw-bold shadow border"><span style="margin-right: 21px;">NAMA</span>: <?= $data['DataSantri'][0]['nama'];?><br><span class="me-4">KELAS</span>: <?= $data['DataSantri'][0]['kelas'] . ' ' . $data['DataSantri'][0]['marhalah'] . ' ' . $data['DataSantri'][0]['ruang']  ;?><br><span style="margin-right: 13px;">KAMAR</span>: <?= $data['DataSantri'][0]['kamar'];?></p>
          </div>
          <div class="position-absolute top-0 end-0"><input class="rounded-3 p-1  mt-4 me-5 text-center fw-bold" type="search" name="" id="" placeholder="--  filter  --"><svg width="24" height="24" class="position-absolute end-0" style="margin-top:32px; margin-right: 220px;"><path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"/></svg></div>
          

        <div id="mentahan" class="container mt-2">
        <div class="row">
          <div class="col">
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-center fw-bold align-items-center list-group-item list-group-item-action active" aria-current="true">SPP</li>
            <li class="list-group-item d-flex justify-content-between align-items-center">JANUARI<span class="badge fw-bold rounded fs-6">
              <select>
                <option>Rp : <?= $data['DataSantri'][0]['spp_februari'];?></option>
                <option>-- -- --</option>
              </select></span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">FEBRUARI<span class="badge fw-bold rounded fs-6">
              <select>
                <option>Rp : <?= $data['DataSantri'][0]['spp_maret'];?></option>
                <option>-- -- --</option>
              </select></span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">MARET<span class="badge fw-bold rounded fs-6">
              <select>
                <option>Rp : <?= $data['DataSantri'][0]['spp_april'];?></option>
                <option>-- -- --</option>
              </select></span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">APRIL<span class="badge fw-bold rounded fs-6">
              <select>
                <option>Rp : <?= $data['DataSantri'][0]['spp_mei'];?></option>
                <option>-- -- --</option>
              </select></span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">MEI<span class="badge fw-bold rounded fs-6">
              <select>
                <option>Rp : <?= $data['DataSantri'][0]['spp_juni'];?></option>
                <option>-- -- --</option>
              </select></span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">JUNI<span class="badge fw-bold rounded fs-6">
              <select>
                <option>Rp : <?= $data['DataSantri'][0]['spp_juli'];?></option>
                <option>-- -- --</option>
              </select></span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">JULI<span class="badge fw-bold rounded fs-6">
              <select>
                <option>Rp : <?= $data['DataSantri'][0]['spp_agustus'];?></option>
                <option>-- -- --</option>
              </select></span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">AGUSTUS<span class="badge fw-bold rounded fs-6">
              <select>
                <option>Rp : <?= $data['DataSantri'][0]['spp_agustus'];?></option>
                <option>-- -- --</option>
              </select></span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">SEPTEMBER<span class="badge fw-bold rounded fs-6">
              <select>
                <option>Rp : <?= $data['DataSantri'][0]['spp_september'];?></option
                ><option>-- -- --</option>
              </select></span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">OKTOBER<span class="badge fw-bold rounded fs-6">
              <select>
                <option>Rp : <?= $data['DataSantri'][0]['spp_oktober'];?></option>
                <option>-- -- --</option>
              </select></span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">NOVEMBER<span class="badge fw-bold rounded fs-6">
              <select>
                <option>Rp : <?= $data['DataSantri'][0]['spp_november'];?></option>
                <option>-- -- --</option>
              </select></span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">DESEMBER<span class="badge fw-bold rounded fs-6">
              <select>
                <option>Rp : <?= $data['DataSantri'][0]['spp_desember'];?></option>
                <option>-- -- --</option>
              </select></span></li>
          </ul>
          </div>
          <div class="col">
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-center fw-bold align-items-center list-group-item list-group-item-action active" aria-current="true">SPP</li>
            <li class="list-group-item d-flex justify-content-between align-items-center">JANUARI<span class="badge fw-bold rounded fs-6">
              <select>
                <option>Rp : <?= $data['DataSantri'][0]['spp_februari'];?></option>
                <option>-- -- --</option>
              </select></span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">FEBRUARI<span class="badge fw-bold rounded fs-6">
              <select>
                <option>Rp : <?= $data['DataSantri'][0]['spp_maret'];?></option>
                <option>-- -- --</option>
              </select></span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">MARET<span class="badge fw-bold rounded fs-6">
              <select>
                <option>Rp : <?= $data['DataSantri'][0]['spp_april'];?></option>
                <option>-- -- --</option>
              </select></span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">APRIL<span class="badge fw-bold rounded fs-6">
              <select>
                <option>Rp : <?= $data['DataSantri'][0]['spp_mei'];?></option>
                <option>-- -- --</option>
              </select></span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">MEI<span class="badge fw-bold rounded fs-6">
              <select>
                <option>Rp : <?= $data['DataSantri'][0]['spp_juni'];?></option>
                <option>-- -- --</option>
              </select></span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">JUNI<span class="badge fw-bold rounded fs-6">
              <select>
                <option>Rp : <?= $data['DataSantri'][0]['spp_juli'];?></option>
                <option>-- -- --</option>
              </select></span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">JULI<span class="badge fw-bold rounded fs-6">
              <select>
                <option>Rp : <?= $data['DataSantri'][0]['spp_agustus'];?></option>
                <option>-- -- --</option>
              </select></span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">AGUSTUS<span class="badge fw-bold rounded fs-6">
              <select>
                <option>Rp : <?= $data['DataSantri'][0]['spp_agustus'];?></option>
                <option>-- -- --</option>
              </select></span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">SEPTEMBER<span class="badge fw-bold rounded fs-6">
              <select>
                <option>Rp : <?= $data['DataSantri'][0]['spp_september'];?></option
                ><option>-- -- --</option>
              </select></span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">OKTOBER<span class="badge fw-bold rounded fs-6">
              <select>
                <option>Rp : <?= $data['DataSantri'][0]['spp_oktober'];?></option>
                <option>-- -- --</option>
              </select></span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">NOVEMBER<span class="badge fw-bold rounded fs-6">
              <select>
                <option>Rp : <?= $data['DataSantri'][0]['spp_november'];?></option>
                <option>-- -- --</option>
              </select></span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">DESEMBER<span class="badge fw-bold rounded fs-6">
              <select>
                <option>Rp : <?= $data['DataSantri'][0]['spp_desember'];?></option>
                <option>-- -- --</option>
              </select></span></li>
          </ul>
          </div>
          <div class="col">
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-center fw-bold align-items-center list-group-item list-group-item-action active" aria-current="true">LAIN-LAIN</li>
            <li class="list-group-item d-flex justify-content-between align-items-center">IMTIHAN SEM 1<span class="badge  rounded fs-6">
              <select>
                <option>Rp : <?= $data['DataSantri'][0]['imtihan_sem_1'];?></option>
                <option>-- -- --</option>
              </select></span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">IMTIHAN SEM 2<span class="badge  rounded fs-6">
              <select>
                <option>Rp : <?= $data['DataSantri'][0]['imtihan_sem_2'];?></option>
                <option>-- -- --</option>
              </select></span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">UJIAN<span class="badge  rounded fs-6">
              <select>
                <option>Rp : <?= $data['DataSantri'][0]['ujian'];?></option>
                <option>-- -- --</option>
              </select></span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">WISUDA<span class="badge  rounded fs-6">
              <select>
                <option>Rp : <?= $data['DataSantri'][0]['wisuda'];?></option>
                <option>-- -- --</option>
              </select></span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">HAFLAH<span class="badge  rounded fs-6">
              <select>
                <option>Rp : <?= $data['DataSantri'][0]['haflah'];?></option>
                <option>-- -- --</option>
              </select></span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">FISMA<span class="badge  rounded fs-6">
              <select>
                <option>Rp : <?= $data['DataSantri'][0]['fisma'];?></option>
                <option>-- -- --</option>
              </select></span></li>
          </ul>
                      <div class="mt-4 ">
                        <div class="SimpanData btn btn-danger col offset-1">Simpan</div>
                        <div class=" btn btn-danger col offset-2">Print</div>
                      </div>
          </div>
        </div>

      </div>
    </div>
  </div>





         
