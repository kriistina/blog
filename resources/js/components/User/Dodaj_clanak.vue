<template>
    <div class="container">
        <form>
            <br />
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
                class="figure-img img-fluid"
                style="max-height: 300px"
            />
            <br />

            <v-date-picker id="datum_objave" v-model="form.datum_objave">
                <br />
            </v-date-picker>
            <br />

            <v-btn @click="spremiClanak()">Objavi</v-btn>
        </form>
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
                .then((response) => {
                    console.log(response);
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
