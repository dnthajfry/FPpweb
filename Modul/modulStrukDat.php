<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul: Struktur Data dan Algoritma</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
            color: #333;
        }

        /* Navbar */
        .navbar {
            background-color: #007bff;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar a {
            text-decoration: none;
            color: #fff;
            margin-right: 15px;
            font-weight: bold;
        }

        .navbar a:hover {
            color: #0056b3;
        }

        /* Sidebar */
        .sidebar {
            position: fixed;
            top: 45px;
            right: 0;
            width: 250px;
            height: 35vh;
            background-color: #f8f9fa;
            border-left: 1px solid #ddd;
            overflow-y: auto;
            padding: 20px;
            box-shadow: -2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .sidebar h2 {
            font-size: 18px;
            margin-top: 0px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 10px 0;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #007bff;
        }

        .sidebar ul li a:hover {
            text-decoration: underline;
        }

        .container {
            max-width: 1350px;
            margin: 0px auto;
            padding: 20px;
            margin-top: 5px;
        }

        .container h1 {
            color: #007bff;
            font-size: 28px;
        }

        .step {
            margin-bottom: 20px;
        }
        .stepBottom {
            margin-bottom: 50px;
        }

        .step h2 {
            font-size: 20px;
            color: #333;
        }

        .step p {
            font-size: 16px;
            color: #555;
            line-height: 1.8;
            margin-bottom: 10px;
            margin-right: 200px;
            margin-left: 20px;
        }

        pre {
            background-color: #f1f1f1;
            padding: 10px;
            border-radius: 5px;
            overflow-x: auto;
        }

        .back-button,
        .next-button {
            position: fixed;
            bottom: 10px;
            border: none;
            border-radius: 50px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .back-button {
            left: 20px;
            background-color: #007bff;
            color: #fff;
            padding: 12px 25px;
        }

        .back-button:hover {
            background-color: #0056b3;
        }

        .next-button {
            right: 20px;
            background-color: #007bff;
            color: #fff;
            padding: 12px 25px;
        }

        .next-button:hover {
            background-color: #0056b3;
        }
        .bottom-bar {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #007bff;
            padding: 15px 0;
            display: flex;
            font-weight: bold;
            justify-content: center;
            align-items: center;
            box-shadow: 0 -2px 6px rgba(0, 0, 0, 0.1);
            color: #fff;
            font-size: 16px;
        }
    </style>
</head>
<body>

   
    <div class="sidebar">
        <h2>Daftar Modul</h2>
        <ul>
            <li><a href="#linear">1. Struktur Data Linear</a></li>
            <li><a href="#tree">2. Struktur Data Tree</a></li>
            <li><a href="#graph">3. Struktur Data Graph</a></li>
            <li><a href="#algo">4. Algoritma Sorting dan Searching</a></li>
            <li><a href="#complexity">5. Analisis Kompleksitas</a></li>
        </ul>
    </div>

    <div class="navbar">
        <a href="#">Home</a>
        <span>Modul: Struktur Data dan Algoritma</span>
    </div>

    <div class="container">
        <h1>Modul: Struktur Data dan Algoritma</h1>

        <div class="step" id="linear">
            <h2>1. Struktur Data Linear</h2>
            <p>Struktur data linear adalah struktur di mana elemen data diatur secara berurutan, seperti array, linked list, stack, dan queue. Contoh implementasi:</p>
            <pre><code>// Contoh Stack
class Stack {
    constructor() {
        this.items = [];
    }

    push(element) {
        this.items.push(element);
    }

    pop() {
        return this.items.pop();
    }
}
</code></pre>
        </div>

        <div class="step" id="tree">
            <h2>2. Struktur Data Tree</h2>
            <p>Tree adalah struktur data hierarkis dengan satu node root dan node lainnya diatur dalam level. Contoh umum adalah binary tree, binary search tree, dan heap.</p>
            <pre><code>// Contoh Binary Tree Node
class Node {
    constructor(value) {
        this.value = value;
        this.left = null;
        this.right = null;
    }
}
</code></pre>
        </div>

        <div class="step" id="graph">
            <h2>3. Struktur Data Graph</h2>
            <p>Graph adalah struktur data yang terdiri dari simpul (node) dan sisi (edge). Graph dapat berarah atau tidak berarah, serta berbobot atau tidak berbobot.</p>
            <pre><code>// Contoh Representasi Graph dengan Adjacency List
class Graph {
    constructor() {
        this.adjList = new Map();
    }

    addVertex(vertex) {
        if (!this.adjList.has(vertex)) {
            this.adjList.set(vertex, []);
        }
    }

    addEdge(vertex1, vertex2) {
        this.adjList.get(vertex1).push(vertex2);
        this.adjList.get(vertex2).push(vertex1); // Untuk graph tidak berarah
    }
}
</code></pre>
        </div>

        <div class="step" id="algo">
            <h2>4. Algoritma Sorting dan Searching</h2>
            <p>Algoritma seperti Bubble Sort, Merge Sort, dan Binary Search sering digunakan bersama struktur data untuk pengolahan data.</p>
            <pre><code>// Contoh Binary Search
function binarySearch(arr, target) {
    let left = 0, right = arr.length - 1;
    while (left <= right) {
        let mid = Math.floor((left + right) / 2);
        if (arr[mid] === target) return mid;
        else if (arr[mid] < target) left = mid + 1;
        else right = mid - 1;
    }
    return -1;
}
</code></pre>
        </div>

        <div class="stepBottom" id="complexity">
            <h2>5. Analisis Kompleksitas</h2>
            <p>Analisis kompleksitas digunakan untuk mengevaluasi efisiensi algoritma berdasarkan waktu (time complexity) dan ruang (space complexity). Contoh:</p>
            <pre><code>// Notasi Big-O untuk Bubble Sort
O(n^2) // Nested loop

// Notasi Big-O untuk Binary Search
O(log n) // Setiap langkah membagi array menjadi dua</code></pre>
        </div>
    </div>

    <div class="bottom-bar">
        <span>Modul Struktur Data</span>
        </div>
    </div>
    <button class="back-button" onclick="window.location.href='../index.php'">Home</button>
    <button class="next-button" onclick="window.location.href='../Ujian/ujianMode.php'">Kerjakan Test</button>

</body>
</html>
