<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    @vite('resources/css/app.css')

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
</head>

<body class="text-black font-poppins">
    <section id="Dashboard" class="flex">
        <div id="Sidebar"
            class="w-[280px] flex flex-col gap-[30px] p-[30px] shrink-0 h-screen overflow-y-scroll no-scrollbar">
            <div class="flex justify-center">
                <h1 class="text-2xl font-bold">Halaman Admin</h1>
            </div>
            <div class="general-menu flex flex-col gap-[18px]">
                <h3 class="text-gray-500 uppercase font-semibold text-sm leading-[21px]">GENERAL</h3>
                <a href="#"
                    class="flex items-center">
                    <p class="font-semibold">Dashboard</p>
                </a>
            </div>
            <hr class="text-taskia-background-grey">
            <div class="general-menu flex flex-col gap-[18px]">
                <h3 class="font-semibold text-sm leading-[21px]">OTHERS</h3>
            </div>
        </div>
        <div id="Content"
            class="flex flex-col bg-taskia-background-grey rounded-l-[60px] w-full h-screen overflow-y-scroll p-[50px] gap-[30px]">
            <div class="dashboard-nav bg-white flex justify-between items-center w-full  p-4 rounded-[18px]">
                <div
                    class="dashboard-search flex items-center p-[12px_20px] rounded-full border border-taskia-background-grey w-[400px] h-12 focus-within:ring-2 focus-within:ring-taskia-purple">
                    <input type="text"
                        class="font-semibold placeholder:text-taskia-grey placeholder:font-normal focus:outline-none w-full"
                        placeholder="Search by report name..." name="name" required>
                </div>


                <div class="flex gap-[30px] items-center">
                  
                    <div class="flex h-12 border-x border-[0.5px] border-taskia-background-grey"></div>
                    <div class="flex gap-3 items-center">
                        <div class="*:text-right flex flex-col">
                               <p class="font-bold">Jannellia</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-[30px]">
                <div class="content-header flex justify-between items-center">
                    <div>
                        <h1 class="font-extrabold text-[30px] leading-[45px]">Dashboard</h1>
                    </div>
                    <div class="flex gap-3 items-center">
                        <a id="btnAddTaskHeader" href="add-task.html"
                            class="px-3 py-3 bg-gray-800 text-sm rounded-lg font-semibold text-white">Tambah Data</a>
                    </div>
                </div>

              
            </div>
        </div>
    </section>

</body>

</html>