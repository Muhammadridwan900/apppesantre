<?php

class DataSantri
{
    private $table = 'dt_santri';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getData()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getIdSantri($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();

    }

    public function inputDataSantri($data)
    {
        $query = "INSERT INTO dt_santri(nis, nama, kelas, marhalah, ruang, kamar, spp_januari, spp_februari, spp_maret, spp_april, spp_mei, spp_juni, spp_juli, spp_agustus, spp_september, spp_oktober, spp_november, spp_desember, kost_januari, kost_februari, kost_maret, kost_april, kost_mei, kost_juni, kost_juli, kost_agustus, kost_september, kost_oktober, kost_november, kost_desember, imtihan_sem_1, imtihan_sem_2, ujian, haflah, wisuda, fisma) VALUES(:nis, :nama, :kelas, :marhalah, :ruang, :kamar, :spp_januari, :spp_februari, :spp_maret, :spp_april, :spp_mei, :spp_juni, :spp_juli, :spp_agustus, :spp_september, :spp_oktober, :spp_november, :spp_desember, :kost_januari, :kost_februari, :kost_maret, :kost_april, :kost_mei, :kost_juni, :kost_juli, :kost_agustus, :kost_september, :kost_oktober, :kost_november, :kost_desember, :imtihan_sem_1, :imtihan_sem_2, :ujian, :haflah, :wisuda, :fisma)";

                    $this->db->query($query);
                    $this->db->bind('nis', $data['nis']);
                    $this->db->bind('nama', $data['nama']);
                    $this->db->bind('marhalah', $data['marhalah']);
                    $this->db->bind('kelas', $data['kelas']);
                    $this->db->bind('ruang', $data['ruang']);
                    $this->db->bind('kamar', $data['kamar']);

                    $this->db->bind('spp_januari', '80.000');
                    $this->db->bind('spp_februari', '80.000');
                    $this->db->bind('spp_maret', '80.000');
                    $this->db->bind('spp_april', '80.000');
                    $this->db->bind('spp_mei', '80.000');
                    $this->db->bind('spp_juni', '80.000');
                    $this->db->bind('spp_juli', '80.000');
                    $this->db->bind('spp_agustus', '80.000');
                    $this->db->bind('spp_september', '80.000');
                    $this->db->bind('spp_oktober', '80.000');
                    $this->db->bind('spp_november', '80.000');
                    $this->db->bind('spp_desember', '80.000');
                    $this->db->bind('kost_januari', '230.000');
                    $this->db->bind('kost_februari', '230.000');
                    $this->db->bind('kost_maret', '230.000');
                    $this->db->bind('kost_april', '230.000');
                    $this->db->bind('kost_mei', '230.000');
                    $this->db->bind('kost_juni', '230.000');
                    $this->db->bind('kost_juli', '230.000');
                    $this->db->bind('kost_agustus', '230.000');
                    $this->db->bind('kost_september', '230.000');
                    $this->db->bind('kost_oktober', '230.000');
                    $this->db->bind('kost_november', '230.000');
                    $this->db->bind('kost_desember', '230.000');
                    $this->db->bind('imtihan_sem_1', '45.000');
                    $this->db->bind('imtihan_sem_2', '45.000');
                    $this->db->bind('ujian', '350.000');
                    $this->db->bind('haflah', '20.000');
                    $this->db->bind('wisuda', '300.000');
                    $this->db->bind('fisma', '40.000');


                        $this->db->execute();
                        return $this->db->rowCount();

                    
    }

    // public function inputDataSantri($data)
    // {
    //     $sql="INSERT INTO password_reset_temp(email,key1,expDate) VALUES(:email,:key1,:expDate)";    
    //     $query = $dbh->prepare($sql);
    //     $query->bindParam(':email',$email,PDO::PARAM_STR);
    //     $query->bindParam(':key1',$key1,PDO::PARAM_STR);
    //     $query->bindParam(':expDate',$expDate,PDO::PARAM_STR);
    //     $query->execute();
    // }
    public function hapusDataSantri($id)
    {
        $query = 'DELETE FROM dt_santri WHERE id = :id';
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }

}
 