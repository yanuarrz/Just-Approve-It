<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body style="font-family: 'Source Sans Pro', sans-serif">
    <div class="w-full">
        <div class="h-2 bg-indigo"></div>
        <div class="flex items-center justify-center h-screen">
            <div class="flex p-8 rounded rounded shadow-lg">
                <div class="px-12 py-6">
                    <div class="text-center">
                        <h1 class="font-bold text-3xl text-grey-darkest leading-loose my-2 ">Kalkulator Lombok</h1>
                        <p class="font-normal text-2xl text-grey-darkest leading-loose my-3">Andreas Peter Chandra<br>1461800113</p>
                        <div class="w-full text-center">
                            <form action="/calculator_praktikumptw3/index.php/calculator/hitung" method="POST">
                                <div class="max-w-sm mx-auto p-1 pr-0 flex items-center">
                                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" type="text" name="bilangan1" id="bilangan1" autocomplete="off" value="<?php echo (isset($bilangan1) ? $bilangan1 : 0) ?>">
                                    <select name="operator" id="operator">
                                        <option value="tambah" <?php echo isset($operator) && $operator == 'tambah' ? 'selected' : '' ?>>Tambah</option>
                                        <option value="kurang" <?php echo isset($operator) && $operator == 'kurang' ? 'selected' : '' ?>>Kurang</option>
                                        <option value="kali" <?php echo isset($operator) && $operator == 'kali' ? 'selected' : '' ?>>Kali</option>
                                        <option value="bagi" <?php echo isset($operator) && $operator == 'bagi' ? 'selected' : '' ?>>Bagi</option>
                                    </select>
                                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" type="text" name="bilangan2" id="bilangan2" autocomplete="off" value="<?php echo (isset($bilangan2) ? $bilangan2 : 0) ?>">
                                    <button type="submit" name="submit" value="Hitung" class="appearance-none bg-black text-white text-base font-semibold tracking-wide uppercase p-3 rounded shadow hover:bg-indigo-light">Hitung</button>
                                    <?php if (isset($hasil)) : ?>
                                        <strong>
                                            <p class="text-center">Hasilnya : <?php echo $hasil ?></p>
                                        </strong>
                                    <?php endif ?>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>