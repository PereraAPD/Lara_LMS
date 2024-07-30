<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700" id="dataTable">
        <thead>
            <tr>
                @foreach ($columns as $column)
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider @if ($column['no-sort']) sortable="false" @endif">
                        {{ $column['label'] }}
                    </th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr>
                    @foreach ($columns as $column)
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                            @if ($column['name'] === 'actions') 
                                <a href="{{ route($actionRoute . '.edit', $row->id) }}" class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-600">Edit</a>
                                <form method="POST" action="{{ route($actionRoute . '.destroy', $row->id) }}" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-600" onclick="return confirm('Are you sure you want to delete this record?')">Delete</button>
                                </form>
                            @elseif (strpos($column['name'], '.') !== false)
                                {{ $row->{$column['name']} }}
                            @else
                                {{ $row->$column['name'] }}
                            @endif
                        </td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            // Add DataTables options here, e.g.,
            // dom: 'Bfrtip',
            // buttons: [
            //     'copy', 'csv', 'excel', 'pdf', 'print'
            // ],
            // order: [[0, 'asc']], // Default sort column
            // language: {
            //     search: '_INPUT_',
            //     searchPlaceholder: 'Search...',
            //     paginate: {
            //         next: 'Next',
            //         previous: 'Previous'
            //     }
            // }
        });
    });
</script>