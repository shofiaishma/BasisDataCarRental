<x-app-layout>
  <x-slot name="title">Admin</x-slot>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
      {{ __('Items') }}
    </h2>
  </x-slot>

  <x-slot name="script">
    <script>
      var datatable = $('#dataTable').DataTable({
        processing: true,
        serverSide: true,
        stateSave: true,
        ajax: {
          url: '{!! url()->current() !!}'
        },
        language: {
          url: '//cdn.datatables.net/plug-ins/1.12.1/i18n/id.json'
        },
        columns: [{
            data: 'id',
            name: 'id',
          },
          {
            data: 'thumbnail',
            name: 'thumbnail',
            orderable: false,
            searchable: false,
          },
          {
            data: 'name',
            name: 'name',
          },
          {
            data: 'type.name',
            name: 'type.name',
          },
          {
            data: 'brand.name',
            name: 'brand.name',
          },
          {
            data: 'price',
            name: 'price',
            searchable: false,
          },
          {
            data: 'action',
            name: 'action',
            orderable: false,
            searchable: false,
            width: '15%',
          },
        ],
      });
    </script>
  </x-slot>

  <div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="mb-10">
        <a href="{{ route('owner.items.create') }}"
          class="rounded bg-green-500 px-4 py-2 font-bold text-white shadow-lg hover:bg-green-700">
          + Buat Item
        </a>
      </div>
      <div class="overflow-hidden shadow sm:rounded-md">
        <div class="bg-white px-4 py-5 sm:p-6">
          <table id="dataTable">
            <thead>
              <tr>
                <th>ID</th>
                <th>Thumbnail</th>
                <th>Nama</th>
                <th>Type</th>
                <th>Brand</th>
                <th>Harga</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody></tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
