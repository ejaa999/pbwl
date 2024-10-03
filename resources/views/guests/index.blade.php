@extends('layouts.template')
@section('title', 'Guests List')
@section('body')
    <div class="mt-4 p-5 bg-black text-white rounded">
        <h1>Guests List</h1>
    </div>
    <div class="container mt-5">
        <table class="table table-boarded mb-5">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Message</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Update At</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($guest as $guest)
                    <tr>
                        <th scope="row">{{ $guest->id }}</th>
                        <td>{{ $guest->name }}</td>
                        <td>{{ $guest->message, 50, '...' }}</td>
                        <td>{{ $guest->email }}</td>
                        <td>{{ $guest->phone_number }}</td>
                        <td>{{ $guest->created_at }}</td>
                        <td>{{ $guest->updated_at }}</td>
                    </tr>

                @empty
                    <tr>
                        <td colspan="7">No Guests Found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
