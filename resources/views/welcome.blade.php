@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="text-center mb-5">
                <h1 class="display-4 fw-bold text-primary mb-3">Welcome to Items Management System</h1>
                <p class="lead text-muted">Your Complete Solution for Inventory Management</p>
            </div>

            <div class="row g-4 mb-5">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body text-center">
                            <i class="fas fa-box-open fa-3x text-primary mb-3"></i>
                            <h3 class="card-title h5">Manage Items</h3>
                            <p class="card-text">Easily add, edit, and track your inventory items in real-time.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body text-center">
                            <i class="fas fa-chart-line fa-3x text-success mb-3"></i>
                            <h3 class="card-title h5">Track Progress</h3>
                            <p class="card-text">Monitor your inventory levels and track changes over time.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body text-center">
                            <i class="fas fa-tasks fa-3x text-info mb-3"></i>
                            <h3 class="card-title h5">Efficient Management</h3>
                            <p class="card-text">Streamline your inventory processes with our easy-to-use system.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <a href="{{ route('items.index') }}" class="btn btn-primary btn-lg px-4">
                    <i class="fas fa-arrow-right me-2"></i>Get Started
                </a>
            </div>
        </div>
    </div>
</div>
@endsection 