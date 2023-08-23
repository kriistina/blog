<template>
    <div class="container">
        <div class="bg-white mt-5 p-5">
            <h1 class="text-center fw-bold">DODAJ NOVI ČLANAK</h1>
            <hr />
            <form>
                <v-row>
                    <v-col md="12" lg="7">
                        <v-text-field
                            id="naslov"
                            label="Unesite naziv članka.."
                            hint="Ovo polje je obavezno"
                            v-model="form.naziv"
                        ></v-text-field>

                        <v-autocomplete
                            id="kategorija"
                            label="Odaberite kategoriju.."
                            :items="kategorije"
                            item-text="naziv"
                            item-value="id"
                            v-model="form.kategorija"
                        ></v-autocomplete>

                        <v-textarea
                            id="sadrzaj"
                            label="Unesite sadržaj članka.."
                            hint="Ovo polje je obavezno"
                            v-model="form.sadrzaj"
                        ></v-textarea>

                        <input
                            type="file"
                            id="slika"
                            name="slika"
                            class="form-control"
                            @change="izabranaSlika"
                        />

                        <img
                            :src="`${form.slika}`"
                            class="figure-img img-fluid mt-4"
                            style="max-height: 300px"
                            width="inherit"
                        />
                    </v-col>

                    <v-col md="12" lg="5">
                        <v-date-picker
                            id="datum_objave"
                            color="secondary"
                            v-model="form.datum_objave"
                            width="inherit"
                            class="shadow-lg bg-body-tertiary rounded"
                        >
                        </v-date-picker>
                    </v-col>
                </v-row>

                <v-btn color="secondary" @click="spremiClanak()">Objavi</v-btn>
                <v-alert v-if="clanakDodan" type="success"
                    >Uspješno ste dodali članak!</v-alert
                >
            </form>
        </div>
    </div>
</template>

<script>
export default {
    created() {
        this.dohvatiKategorije();
    },
    data: () => ({
        form: {},
        kategorije: [],
        clanakDodan: false,
    }),
    methods: {
        dohvatiKategorije() {
            axios
                .get("http://127.0.0.1:8000/api/kategorije")
                .then((response) => {
                    this.kategorije = response.data.kategorije;
                })
                .catch((e) => {
                    console.log("Nešto pošlo krivo! Greška=" + e);
                });
        },
        spremiClanak() {
            axios
                .post("http://127.0.0.1:8000/clanak/objavi", this.form)
                .then(() => {
                    this.clanakDodan = true;
                    setTimeout(() => {
                        (this.clanakDodan = false),
                            (window.location = "http://127.0.0.1:8000/blog");
                    }, 3500);
                })
                .catch((e) => {
                    console.log("Nešto pošlo krivo! Greška=" + e);
                });
        },

        izabranaSlika(event) {
            let file = event.target.files[0];
            let reader = new FileReader();
            reader.onloadend = () => {
                this.form.slika = reader.result;
            };
            reader.readAsDataURL(file);
        },
    },
};
</script>

<style scoped>
.container {
    width: 60%;
}
</style>
