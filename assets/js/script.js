document.addEventListener("DOMContentLoaded", function () {
	// Mendapatkan elemen input
	var nilaiUtsInput = document.getElementById("nilai_uts");
	var nilaiUasInput = document.getElementById("nilai_uas");
	var totalNilaiInput = document.getElementById("total_nilai");

	var nilaiUtsElement = document.getElementById("nilai_uts");
	var nilaiUasElement = document.getElementById("nilai_uas");
	var totalNilaiElement = document.getElementById("total_nilai");

	// Menambahkan event listener untuk perubahan nilai
	nilaiUtsInput.addEventListener("input", updateTotalNilai);
	nilaiUasInput.addEventListener("input", updateTotalNilai);
	nilaiUtsElement.addEventListener("change", hitungTotalNilai);
	nilaiUasElement.addEventListener("change", hitungTotalNilai);

	// Fungsi untuk menghitung total nilai
	function updateTotalNilai() {
		var nilaiUts = parseFloat(nilaiUtsInput.value) || 0;
		var nilaiUas = parseFloat(nilaiUasInput.value) || 0;
		var nilaiUts = parseFloat(nilaiUtsElement.value) || 0;
		var nilaiUas = parseFloat(nilaiUasElement.value) || 0;

		// Menghitung total nilai
		var totalNilai = nilaiUts + nilaiUas;

		// Menetapkan nilai total ke input total_nilai
		totalNilaiInput.value = totalNilai;
		totalNilaiElement.value = totalNilai;
	}
});
