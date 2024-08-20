# ini untuk mendefinisikan kelas kalkulator
class Kalkulator: 
# ini adalah konstruktor
    def __init__(self, angka1, angka2): 
        self.angka1 = angka1
        self.angka2 = angka2
#ini untuk operasi aritmatika pertambahan
    def tambah(self):
        return self.angka1 + self.angka2
#ini untuk operasi aritmatika pengurangan
    def kurang(self):
        return self.angka1 - self.angka2
#ini untuk operasi aritmatika perkalian
    def kali(self):
        return self.angka1 * self.angka2
#ini untuk operasi aritmatika pembagian
    def bagi(self):
        if self.angka2 == 0:
            return "tidak bisa dibagi 0"
        return self.angka1 / self.angka2
        
# ini untuk mengambil input dari user
angka1 = float(input("Masukan angka pertama: "))
angka2 = float(input("Masukan angka kedua: "))

# ini untuk membuat objek dari kelas kalkulator
Kalkulator = Kalkulator(angka1, angka2)

# ini untuk menampilkan pilihan operasi aritmatika
print("PIlih operasi aritmatika: ")
print("1.Penjumlahan")
print("2.Pengurangan")
print("3.Perkalian")
print("4.Pembagian")

# ini untuk input pilihan operasi aritmatika pilihan user
operasi = input("Masukan pilihan 1/2/3/4: ")

# ini untuk melakukan operasi aritmatika yang dipilih user
if operasi == "1":
    print(f"Hasil penjumlahan: {Kalkulator.tambah()}")
elif operasi == "2":
    print(f"Hasil Pengurangan: {Kalkulator.kurang()}")
elif operasi == "3":
    print(f"Hasil perkalian: {Kalkulator.kali()}")
elif operasi == "4":
    print(f"Hasil Pembagian: {Kalkulator.bagi()}")
else:
    print("error")
    
        

