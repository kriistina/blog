<template>
    <div class="container">
        <v-img
            class="align-end text-white"
            cover
            :src="`${url}${clanakData.slika}`"
            width="inherit"
            height="500"
        ></v-img>

        <br />

        <v-row>
            <h1 class="text-center pb-10">{{ clanakData.naslov }}</h1>
            <p class="fs-5">{{ clanakData.sadrzaj }}</p>
        </v-row>
        <v-row>
            <p class="autor">Autor članka: {{ clanakData.autor }}</p>
        </v-row>

        <v-row>
            <h1 class="text-center pb-10">Također vam se može svidjeti:</h1>
        </v-row>

        <br />

        <v-row>
            <v-col v-for="clanak in clanci" :key="clanak.id" cols="3">
                <div class="card bg-dark text-black">
                    <v-img
                        class="center card-img"
                        cover
                        :src="`${url}${clanak.slika}`"
                        width="500"
                        height="200"
                    ></v-img>

                    <div class="card-img-overlay">
                        <h5 class="card-title">{{ clanak.naslov }}</h5>
                    </div>
                </div>
            </v-col>
        </v-row>

        <br /><br />

        <div class="bg-image pl-3 text-center">
            <h1 class="pt-10">Ostavi komentar</h1>
            <v-form class="text-center">
                <br />
                <v-textarea
                    label="Vaš komentar"
                    variant="outlined"
                    v-model="form.sadrzaj"
                ></v-textarea>
                <v-text-field
                    label="Ime"
                    v-model="ime"
                    variant="outlined"
                ></v-text-field>
                <v-text-field
                    label="Email"
                    v-model="email"
                    variant="outlined"
                ></v-text-field>
                <v-btn depressed color="error" @click="posaljiKomentar()"
                    >Pošalji</v-btn
                >
                <v-alert v-if="komentarDodan" type="success"
                    >Uspješno ste poslali svoj komentar!</v-alert
                > </v-form
            ><br /><br />
        </div>

        <br /><br />
        <hr />
        <div class="mt-10">
            <h1 class="text-center text-black">
                <i class="fa fa-instagram"></i>Instagram
            </h1>
        </div>
        <div class="container">
            <v-row>
                <v-col
                    cols="12"
                    sm="6"
                    md="4"
                    v-for="slika in slike"
                    :key="slika"
                >
                    <v-card
                        class="mx-auto m-5"
                        height="100"
                        width="300 p-0 m-0"
                    >
                        <v-img
                            class="white--text align-end"
                            height="200px"
                            :src="slika.imgPath"
                        >
                        </v-img>
                    </v-card>
                </v-col>
            </v-row>
        </div>
        <br /><br />
        <br />
        <hr />
    </div>
</template>

<script>
export default {
    data() {
        return {
            form: {},
            url: "/images/",
            komentarDodan: false,
            clanci: [],
            url: "/images/",
            ime: "",
            email: "",
            slike: [
                {
                    imgPath:
                        "https://st2.depositphotos.com/3725083/5485/i/450/depositphotos_54856347-stock-photo-travel-the-world-monument-concept.jpg",
                },
                {
                    imgPath:
                        "https://images.pexels.com/photos/3935702/pexels-photo-3935702.jpeg?cs=srgb&dl=pexels-leah-kelley-3935702.jpg&fm=jpg",
                },
                {
                    imgPath:
                        "https://media.istockphoto.com/id/827263174/photo/travel-planning-on-computer.jpg?s=1024x1024&w=is&k=20&c=47PEebpkr1X-yuQQx0I2rFYtvAG5QVsuD7K96nwxfEU=",
                },
            ],
        };
    },
    created() {
        this.dohvatiClanakData();
        this.dohvatiClanke();
    },
    methods: {
        dohvatiClanakData() {
            const queryString = window.location.hash.substring(1); // Remove the leading '#' from the hash
            const params = new URLSearchParams(queryString);

            const naslov = decodeURIComponent(params.get("naslov"));
            const kategorija = decodeURIComponent(params.get("kategorija"));
            const autor = decodeURIComponent(params.get("autor"));
            const sadrzaj = decodeURIComponent(params.get("sadrzaj"));
            const slika = decodeURIComponent(params.get("slika"));
            const id = decodeURIComponent(params.get("id"));

            this.clanakData = {
                naslov,
                kategorija,
                autor,
                sadrzaj,
                slika,
                id,
            };

            console.log(this.clanakData.naslov);
        },

        dohvatiClanke() {
            axios.get("http://127.0.0.1:8000/api/clanci").then((response) => {
                this.clanci = response.data.clanci;
            });
        },

        posaljiKomentar() {
            axios
                .post(
                    "http://127.0.0.1:8000/clanak/komentiraj/" +
                        this.clanakData.id,
                    this.form
                )
                .then(() => {
                    this.komentarDodan = true;
                    setTimeout(() => {
                        this.komentarDodan = false;
                        this.clearForm();
                    }, 4000);
                })
                .catch((e) => {
                    console.log("Nešto pošlo krivo! Greška=" + e);
                });
        },
        clearForm() {
            this.form.sadrzaj = "";
            this.ime = "";
            this.email = "";
        },
    },
};
</script>
<style scoped>
p {
    color: rgb(48, 48, 48);
}
.bg-image {
    background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRC1V6GFYSx-iJB9_HEG_W8gz4WvC77l97jRTRTpmTzF6vn7Uzu3A3LUVvvVKh4y1-wCkc&usqp=CAU");
    background-size: cover;
    background-position: center;
}
h1 {
    color: #ff5252;
}
.autor {
    color: #ff5252;
    font-weight: bold;
    font-size: 20px;
}
</style>
