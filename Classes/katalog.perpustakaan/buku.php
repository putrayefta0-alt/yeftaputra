<?php
class Buku {
    private $db;
    private $stok;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getStatus() {
        return $this->stok > 0
            ? "Tersedia"
            : "Habis";
    }

    public function semua() {
        $sql = "SELECT * FROM buku ORDER BY judul ASC";
        return $this->db->query($sql)->fetchAll();
    }

    public function cari($id) {
        $sql = "SELECT * FROM buku WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetch();
    }
}
?>