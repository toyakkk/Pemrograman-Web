const weatherData = {
    "Samarinda": { 
        temperature: 27, condition: "Hujan Ringan" 
    },
    "Kuala Lumpur": {
        temperature: 31, condition: "Mendung dan Berawan Sebagian" 
    },
    "Jakarta": {
        temperature: 29, condition: "Awan/Mendung Ringan" 
    },
    "Bandung": {
        temperature: 27, condition: "Awan/Mendung Ringan" 
    },
    "Banjarmasin": {
        temperature: 29, condition: "Berawan sebagian"
    },
    "Tenggarong": {
        temperature: 30, condition: "Berawan"
    },
    "Bontang": {
        temperature: 29, condition: "Berawan"
    }

};

// ambil tombol dan input dari HTML
const button = document.querySelector("button");
const input = document.querySelector("input");

// ketika tombol di klik
button.addEventListener("click", function() {
    const city = input.value.trim();
    
    if(weatherData[city]) {
        const data = weatherData[city];
        console.log(`Cuaca di ${city}:`);
        console.log(`Suhu: ${data.temperature}°C`);
        console.log(`Kondisi: ${data.condition}`);
    } else {
        console.log(`Data cuaca untuk ${city} tidak ditemukan.`);
    }
});