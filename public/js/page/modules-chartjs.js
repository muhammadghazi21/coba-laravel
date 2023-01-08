"use strict";
var kategoriLabels = [];
var kategoriLengths = [];
var produkLabels = [];
var quantities = [];

fetch("/dashboard", {
    method: "GET",
    headers: {
        Accept: "application/json",
        "Content-Type": "application/json",
    },
})
    .then(function (response) {
        return response.json();
    })
    .then(function (data) {
        let m = data.data_kategori;
        let q = data.data_toko;

        for (const element in q) {
            quantities.push(q[element].produk_count);
            produkLabels.push(q[element].nama);
        }

        for (const element in m) {
            kategoriLabels.push(m[element].nama);
            kategoriLengths.push(m[element].produk_count);
        }

        console.log(data);
        var ctx = document.getElementById("myChart3").getContext("2d");
        var myChart = new Chart(ctx, {
            type: "doughnut",
            data: {
                datasets: [
                    {
                        data: quantities,
                        backgroundColor: [
                            "#191d21",
                            "#63ed7a",
                            "#ffa426",
                            "#fc544b",
                            "#6777ef",
                            "#f3f4f6",
                            "#e5e7eb",
                            "#d1d5db",
                        ],
                        label: "Dataset 1",
                    },
                ],
                labels: produkLabels,
            },
            options: {
                responsive: true,
                legend: {
                    position: "bottom",
                },
            },
        });

        var ctx2 = document.getElementById("myChart4").getContext("2d");
        var myChart = new Chart(ctx2, {
            type: "doughnut",
            data: {
                datasets: [
                    {
                        data: kategoriLengths,
                        backgroundColor: [
                            "#191d21",
                            "#63ed7a",
                            "#ffa426",
                            "#fc544b",
                            "#6777ef",
                            "#f3f4f6",
                            "#e5e7eb",
                            "#d1d5db",
                        ],
                        label: "Dataset 1",
                    },
                ],
                labels: kategoriLabels,
            },
            options: {
                responsive: true,
                legend: {
                    position: "bottom",
                },
            },
        });
    })
    .catch(function (err) {
        console.log(err);
    });
