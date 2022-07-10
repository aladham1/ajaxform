<table class="min-w-full">
    <thead>
    <tr class="border-t border-gray-200">
        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" scope="col">
            <span class="lg:pl-1">Contact Name</span>
        </th>
        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" scope="col">Email</th>
        <th class="hidden md:table-cell px-6 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider" scope="col">Phone Number</th>
        <th class="pr-6 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider" scope="col"></th>
    </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-100">
    @foreach($contacts as $contact)
        <tr>
            <td class="px-6 py-3 max-w-0 w-full whitespace-nowrap text-sm font-medium text-gray-900">
                <div class="flex items-center space-x-3 lg:pl-2">
                    <div class="flex-shrink-0 w-2.5 h-2.5 rounded-full bg-pink-600" aria-hidden="true"></div>
                    <a href="#" class="truncate hover:text-gray-600">
                          <span>
                                  {{ $contact->first_name }}, {{ $contact->last_name }}
                          </span>
                    </a>
                </div>
            </td>
            <td class="px-6 py-3 text-sm text-gray-500 font-medium">
                <p><a>{{ $contact->email_address }}</a></p>
            </td>
            <td class="hidden md:table-cell px-6 py-3 whitespace-nowrap text-sm text-gray-500 text-right">{{ $contact->mobile_phone }}</td>
            <td class="px-6 py-3 whitespace-nowrap text-right text-sm font-medium">
                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div id="pagination">
    {{ $contacts->links() }}
</div>
