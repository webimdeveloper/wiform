<template>
    <div class="wiform-admin-wrapper antialiased text-slate-800 p-4">
      <header class="flex items-center justify-between mb-8 bg-white p-6 rounded-xl shadow-sm border border-slate-200">
        <div>
          <h1 class="text-2xl font-bold text-slate-900 m-0">Wiform Dashboard</h1>
          <p class="text-slate-500 m-0 mt-1">Manage your forms and submissions</p>
        </div>
        <button class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg font-medium transition-colors shadow-sm">
          + Create New Form
        </button>
      </header>
  
      <main class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="md:col-span-2 space-y-6">
          <slot /> </div>
  
        <aside class="space-y-6">
          <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-200">
            <h3 class="font-semibold mb-4">Quick Stats</h3>
            <div class="space-y-4 text-sm">
              <div class="flex justify-between border-b pb-2">
                <span>Total Submissions</span>
                <span class="font-bold">1,204</span>
              </div>
              <div class="flex justify-between border-b pb-2">
                <span>Active Forms</span>
                <span class="font-bold">3</span>
              </div>
            </div>
          </div>
        </aside>
      </main>
    </div>
  </template>