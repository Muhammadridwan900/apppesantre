
    <div class="container bg-light mt-2 rounded-2 shadow-lg">
      <div class="row" style="height: 390px;">
        <div class="col">
          <h1>KETENTUAN PEMBAYARAN</h1>
          <table class="table table-striped">
            <thead class="text-center" style="background-color:  #e6e6e7;">
              <tr >
                <th scope="col">SPP</th>
                <th scope="col">IMTIHAN</th>
                <th scope="col">UJIAN</th>
                <th scope="col">WISUDA</th>
                <th scope="col">FISMA</th>
                <th scope="col">KOST MAKAN</th>
              </tr>
            </thead>
            <tbody  class="text-center">
              <tr>
                <td scope="row">Rp <?= $data['iuran'][0]['spp_januari'];?></td>
                <td scope="row">Rp <?= $data['iuran'][0]['imtihan_sem_1'];?></td>
                <td scope="row">Rp <?= $data['iuran'][0]['ujian'];?></td>
                <td scope="row">Rp <?= $data['iuran'][0]['wisuda'];?></td>
                <td scope="row">Rp <?= $data['iuran'][0]['fisma'];?></td>
                <td scope="row">Rp <?= $data['iuran'][0]['kost_januari'];?></td>
              </tr>
            </tbody>
          </table>
          <P class="fw-bold mx-2">CATATAN :</P>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam blanditiis sint quaerat alias, vel officiis.</p>
        </div>
      </div>
    </div>