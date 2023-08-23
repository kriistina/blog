<template>
    <div>
        <div class="carousel-container">
            <v-carousel :interval="1000" hide-delimiters :show-arrows="false">
                <v-carousel-item
                    v-for="(item, i) in items"
                    :key="i"
                    :src="item.src"
                    cover
                >
                </v-carousel-item>
            </v-carousel>
        </div>
        <br /><br />
        <hr />
        <h1 class="lead m-3 p-5 text-center font-italic">
            Slike su trenutci zaustavljeni u vječnosti, sjećanja utkana u
            piksele, a duša prošlosti uhvaćena u kadru.
        </h1>

        <hr />
        <div class="container image-grid">
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
                        width="500 p-0 m-0"
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
        <br /><br /><br />
    </div>
</template>

<script>
export default {
    data() {
        return {
            items: [
                {
                    src: "https://whc.unesco.org/uploads/thumbs/news_2280-890-520-20210421160159.jpg",
                },
            ],
            slike: [
                {
                    imgPath:
                        "https://natureconservancy-h.assetsadobe.com/is/image/content/dam/tnc/nature/en/photos/Zugpsitze_mountain.jpg?crop=0%2C214%2C3008%2C1579&wid=1200&hei=630&scl=2.506666666666667",
                },
                {
                    imgPath:
                        "https://mymodernmet.com/wp/wp-content/uploads/2021/04/Nature-Sounds-For-Well-Being-03.jpg",
                },
                {
                    imgPath:
                        "https://hips.hearstapps.com/hmg-prod/images/nature-quotes-landscape-1648265299.jpg",
                },
                {
                    imgPath:
                        "https://images.nationalgeographic.org/image/upload/t_edhub_resource_key_image/v1652341068/EducationHub/photos/ocean-waves.jpg",
                },
                {
                    imgPath:
                        "https://theworldtravelguy.com/wp-content/uploads/2022/10/DSCF5774_gal1.jpg",
                },
                {
                    imgPath:
                        "https://theworldtravelguy.com/wp-content/uploads/2022/10/DSCF8966_gal1.jpg",
                },
                {
                    imgPath:
                        "https://theworldtravelguy.com/wp-content/uploads/2022/10/DSCF6328_gal1.jpg",
                },
                {
                    imgPath:
                        "https://theworldtravelguy.com/wp-content/uploads/2022/10/DSCF6474_gal1.jpg",
                },
                {
                    imgPath:
                        "https://theworldtravelguy.com/wp-content/uploads/2022/10/DSCF6033_gal1.jpg",
                },
                {
                    imgPath:
                        "https://theworldtravelguy.com/wp-content/uploads/2022/10/DSCF5203_gal1.jpg",
                },
                {
                    imgPath:
                        "https://theworldtravelguy.com/wp-content/uploads/2022/10/DSCF3956_gal1.jpg",
                },
                {
                    imgPath:
                        "https://theworldtravelguy.com/wp-content/uploads/2022/10/DSCF3940_gal1.jpg",
                },
                {
                    imgPath:
                        "https://theworldtravelguy.com/wp-content/uploads/2022/10/DSCF3648_gal1.jpg",
                },
                {
                    imgPath:
                        "https://theworldtravelguy.com/wp-content/uploads/2022/10/DSCF3390_gal1.jpg",
                },
                {
                    imgPath:
                        "https://theworldtravelguy.com/wp-content/uploads/2022/10/DSCF3065_gal1.jpg",
                },
                {
                    imgPath:
                        "https://theworldtravelguy.com/wp-content/uploads/2022/10/DSCF2858_gal1.jpg",
                },
                {
                    imgPath:
                        "https://theworldtravelguy.com/wp-content/uploads/2022/10/DSCF2862_gal1.jpg",
                },
                {
                    imgPath:
                        "https://theworldtravelguy.com/wp-content/uploads/2022/10/DSCF2940_gal1.jpg",
                },
                {
                    imgPath:
                        "https://theworldtravelguy.com/wp-content/uploads/2022/10/DSCF2188_gal1.jpg",
                },
                {
                    imgPath:
                        "https://theworldtravelguy.com/wp-content/uploads/2022/10/DSCF2280_gal1.jpg",
                },
                {
                    imgPath:
                        "https://theworldtravelguy.com/wp-content/uploads/2022/10/DSCF1837_gal1.jpg",
                },
            ],
        };
    },
};
</script>
