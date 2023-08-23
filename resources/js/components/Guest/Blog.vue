<template>
    <div class="container">
        <v-row>
            <v-col v-for="clanak in clanci" :key="clanak.id" cols="4">
                <v-card class="mx-auto" max-width="500">
                    <v-img
                        class="align-end text-white center"
                        cover
                        :src="`${url}${clanak.slika}`"
                        width="500"
                        height="200"
                    ></v-img>

                    <v-card-text class="text-center h2">
                        {{ clanak.naslov }}</v-card-text
                    >
                    <hr style="border-width: 2px; font-weight: bold" />

                    <v-card-subtitle class="pt-4 text-center fw-bold">
                        Kategorija:
                        {{ clanak.kategorija.naziv }}</v-card-subtitle
                    >

                    <v-card-text class="text-center fw-bold">
                        <div>Autor: {{ clanak.korisnik.name }}</div>
                    </v-card-text>

                    <v-card-text class="text-center fw-bold">
                        <div>Datum objave: {{ clanak.datum_objave }}</div>
                    </v-card-text>

                    <v-card-actions>
                        <v-row>
                            <v-col>
                                <v-btn
                                    type="button"
                                    class="btn text-white"
                                    color="deep-orange lighten-1"
                                    @click="prikazi(clanak)"
                                >
                                    Saznaj više
                                </v-btn>
                            </v-col>
                            <v-col>
                                <v-btn
                                    icon
                                    @click="
                                        show =
                                            show === clanak.id
                                                ? null
                                                : clanak.id
                                    "
                                >
                                    <v-icon>
                                        {{
                                            show === clanak.id
                                                ? "mdi-chevron-up"
                                                : "mdi-chevron-down"
                                        }}</v-icon
                                    >
                                    Komentari
                                </v-btn>
                            </v-col>
                        </v-row>
                    </v-card-actions>
                    <v-expand-transition>
                        <div v-show="show === clanak.id">
                            <v-divider></v-divider>

                            <v-card-text>
                                <div>
                                    <ul>
                                        <li
                                            v-for="komentar in clanak.komentari"
                                            :key="komentar.id"
                                        >
                                            {{ komentar.sadrzaj }}
                                            ~ Korisnik br.{{
                                                komentar.korisnik_id
                                            }}
                                        </li>
                                    </ul>
                                </div>
                            </v-card-text>
                        </div>
                    </v-expand-transition>
                </v-card>
            </v-col>
        </v-row>
    </div>
</template>

<script>
export default {
    created() {
        this.dohvatiClanke();
    },
    data() {
        return {
            clanci: [],
            url: "/images/",
            komentar: "",
            show: false,
        };
    },
    methods: {
        dohvatiClanke() {
            axios.get("http://127.0.0.1:8000/api/clanci").then((response) => {
                this.clanci = response.data.clanci;
            });
        },
        prikazi(clanak) {
            const clanakData = {
                kategorija: clanak.kategorija.naziv,
                naslov: clanak.naslov,
                autor: clanak.korisnik.name,
                sadrzaj: clanak.sadrzaj,
                slika: clanak.slika,
                id: clanak.id,
            };

            const queryString = Object.keys(clanakData)
                .map(
                    (key) =>
                        `${encodeURIComponent(key)}=${encodeURIComponent(
                            clanakData[key]
                        )}`
                )
                .join("&");
            console.log(clanakData.naslov);
            window.location.href =
                "http://127.0.0.1:8000/clanak#${hash}" + queryString;
        },
    },
};
</script>
<style scoped>
.theme--light.v-card > .v-card__subtitle,
.theme--light.v-card > .v-card__text {
    color: black;
}

.v-btn--icon.v-size--default {
    width: inherit;
}
</style>
