<?php 

class Karyawan_model {
    private $table = 'cyi_karyawan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getKaryawan(){
        $this->db->query('SELECT id,nama,bagian FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getKaryawanById($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataKaryawan($data){
        $query = "INSERT INTO cyi_karyawan
                    VALUES
                  (:id, :sandi, :nama, :bagian)";
        
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('sandi', $data['sandi']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('bagian', $data['bagian']);

        $this->db->execute();

        return $this->$db->fetch_assoc();
    }

    public function hapusDataMahasiswa($id)
    {
        $query = "DELETE FROM cyi_karyawan WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahDataMahasiswa($data)
    {
        $query = "UPDATE cyi_karyawan SET
                    nama = :nama,
                    nrp = :nrp,
                    email = :email,
                    jurusan = :jurusan
                  WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function cariDataMahasiswa()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM cyi_karyawan WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

}