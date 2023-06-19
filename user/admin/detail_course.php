<div class="content">
       <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
           <h2 class="text-lg font-medium mr-auto">
               Course
           </h2>
           <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
               <a href="<?= site_url('dashboard') ?>" class="btn btn-danger shadow-md mr-2"> Kembali</a>
           </div>
       </div>
       <!-- BEGIN: Transaction Details -->
       <?php foreach ($detail as $row) : ?>
       <div class="intro-y grid grid-cols-11 gap-5 mt-5">
           <div class="col-span-12 lg:col-span-4 2xl:col-span-3">
               <div class="box p-5 rounded-md">
                   <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                       <div class="font-medium text-base truncate">Course Title</div>
                   </div>
                   <div class="flex items-center"> <i data-lucide="clipboard" class="w-4 h-4 text-slate-500 mr-2"></i> <b>Course Name:</b> <a href="" class="underline decoration-dotted ml-1"> <?= $row->nama_course ?></a> </div>
                   <div class="flex items-center mt-3"> <i data-lucide="info" class="w-4 h-4 text-slate-500 mr-2"></i> <b>Course Description:&nbsp;</b>
                     <?= $row->Deskripsi ?>
                   </div>
               </div>
           </div>
           <div class="col-span-12 lg:col-span-7 2xl:col-span-8">
               <div class="box p-5 rounded-md">
                   <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                       <div class="font-medium text-base truncate">Course Detail</div>
                   </div>
                   <div class="overflow-auto lg:overflow-visible -mt-3">
                       <table class="table table-striped">
                           <thead>
                               <tr>
                                   <th class="whitespace-nowrap !py-5">Course Item</th>
                                   <th>Kategori</th>
                               </tr>
                           </thead>
                           <tbody>
                                   <tr>
                                       <td class="!py-4">
                                           <div class="flex items-center">
                                            <img src="<?= base_url() . '/images/' . $row->gambar ?>" width="40px">
                                               <a href="" class="font-medium whitespace-nowrap ml-4"><?= $row->nama_course ?></a>
                                           </div>
                                       </td>
                                       <td><?= $row->kategori ?></td>
                                   </tr>
                           </tbody>
                       </table>
                   </div>
               </div>
           </div>
       </div>
   <?php endforeach; ?>
       <!-- END: Transaction Details -->
   </div>