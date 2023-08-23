<template>
    <div class="container">
        <div class="bg-white mt-5 p-5">
            <h1 class="text-center fw-bold">Kontakt</h1>
            <hr />
            <p class="mb-5 mt-5 text-center">
                Ovo su neke informacije kako nas možete kontaktirati, a u
                slučaju da imate neko pitanje slobodno ga postavite, odgovorit
                ćemo u najbržem mogućem vremenu!
            </p>
            <div>
                <div class="mb-5 mt-5 text-center">
                    <h6>Adresa:</h6>
                    <p>481 Creekside Lane Avila <br />Beach, CA 93424</p>
                </div>

                <div class="mb-5 mt-5 text-center">
                    <h6>Telefon:</h6>
                    <p>+53 345 7953 32453 <br />+53 345 7557 822112</p>
                </div>
                <div class="mb-10 mt-5 text-center">
                    <h6>Vaša poruka:</h6>
                    <br />
                    <textarea
                        type="text"
                        placeholder="Unesite poruku.."
                        class="form-control text-center"
                    />
                </div>
                <div class="mb-10 mt-5 text-center">
                    <h6>Email:</h6>
                    <br />

                    <input
                        type="text"
                        placeholder=" email@gmail.com"
                        class="form-control text-center"
                    />
                </div>
                <div class="text-center">
                    <button type="button" class="btn btn-secondary">
                        Pošalji
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>
<style scoped>
.container {
    width: 60%;
}
</style>
