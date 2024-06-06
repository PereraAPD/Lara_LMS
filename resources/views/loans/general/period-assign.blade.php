<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Period Assign') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                @include('loans.general.partials.period-assign-form')
                </div>
            </div>

            <!-- Your Table -->
            @include('loans.general.partials.period-assign-table')
        </div>
    </div>
</x-app-layout>

<script>
function printRecords() {
    // Fetch the content of the table
    var tableContent = document.querySelector('.table-container').outerHTML;

    // Create a new window for printing
    var printWindow = window.open('', '_blank');

    // Set the content of the new window to be the table content
    printWindow.document.write('<html><head><title>Print Records</title></head><body>');
    printWindow.document.write(tableContent);
    printWindow.document.write('</body></html>');

    // Close the document for printing
    printWindow.document.close();

    // Trigger the print function
    printWindow.print();
}
</script>
