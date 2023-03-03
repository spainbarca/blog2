
    <!-- Statistics -->
    <div class="row">
      <div class="col-xl-8 col-xxl-9 d-flex flex-column">
        <!-- Earnings Summary -->
        <div class="block block-rounded flex-grow-1 d-flex flex-column">
          <div class="block-header block-header-default">
            <h3 class="block-title">Earnings Summary</h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                <i class="si si-refresh"></i>
              </button>
              <button type="button" class="btn-block-option">
                <i class="si si-settings"></i>
              </button>
            </div>
          </div>
          <div class="block-content block-content-full flex-grow-1 d-flex align-items-center">
            <!-- Earnings Chart Container -->
            <!-- Chart.js Chart is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _js/pages/be_pages_dashboard.js -->
            <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
            <canvas id="js-chartjs-earnings"></canvas>
          </div>
          <div class="block-content bg-body-light">
            <div class="row items-push text-center w-100">
              <div class="col-sm-4">
                <dl class="mb-0">
                  <dt class="fs-3 fw-bold d-inline-flex align-items-center space-x-2">
                    <i class="fa fa-caret-up fs-base text-success"></i>
                    <span>2.5%</span>
                  </dt>
                  <dd class="fs-sm fw-medium text-muted mb-0">Customer Growth</dd>
                </dl>
              </div>
              <div class="col-sm-4">
                <dl class="mb-0">
                  <dt class="fs-3 fw-bold d-inline-flex align-items-center space-x-2">
                    <i class="fa fa-caret-up fs-base text-success"></i>
                    <span>3.8%</span>
                  </dt>
                  <dd class="fs-sm fw-medium text-muted mb-0">Page Views</dd>
                </dl>
              </div>
              <div class="col-sm-4">
                <dl class="mb-0">
                  <dt class="fs-3 fw-bold d-inline-flex align-items-center space-x-2">
                    <i class="fa fa-caret-down fs-base text-danger"></i>
                    <span>1.7%</span>
                  </dt>
                  <dd class="fs-sm fw-medium text-muted mb-0">New Products</dd>
                </dl>
              </div>
            </div>
          </div>
        </div>
        <!-- END Earnings Summary -->
      </div>
      <div class="col-xl-4 col-xxl-3 d-flex flex-column">
        <!-- Last 2 Weeks -->
        <!-- Chart.js Charts is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _js/pages/be_pages_dashboard.js -->
        <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
        <div class="row items-push flex-grow-1">
          <div class="col-md-6 col-xl-12">
            <div class="block block-rounded d-flex flex-column h-100 mb-0">
              <div class="block-content flex-grow-1 d-flex justify-content-between">
                <dl class="mb-0">
                  <dt class="fs-3 fw-bold">570</dt>
                  <dd class="fs-sm fw-medium text-muted mb-0">Total Orders</dd>
                </dl>
                <div>
                  <div class="d-inline-block px-2 py-1 rounded-3 fs-xs fw-semibold text-danger bg-danger-light">
                    <i class="fa fa-caret-down me-1"></i>
                    2.2%
                  </div>
                </div>
              </div>
              <div class="block-content p-1 text-center overflow-hidden">
                <!-- Total Orders Chart Container -->
                <canvas id="js-chartjs-total-orders" style="height: 90px;"></canvas>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-12">
            <div class="block block-rounded d-flex flex-column h-100 mb-0">
              <div class="block-content flex-grow-1 d-flex justify-content-between">
                <dl class="mb-0">
                  <dt class="fs-3 fw-bold">$5,234.21</dt>
                  <dd class="fs-sm fw-medium text-muted mb-0">Total Earnings</dd>
                </dl>
                <div>
                  <div class="d-inline-block px-2 py-1 rounded-3 fs-xs fw-semibold text-success bg-success-light">
                    <i class="fa fa-caret-up me-1"></i>
                    4.2%
                  </div>
                </div>
              </div>
              <div class="block-content p-1 text-center overflow-hidden">
                <!-- Total Earnings Chart Container -->
                <canvas id="js-chartjs-total-earnings" style="height: 90px;"></canvas>
              </div>
            </div>
          </div>
          <div class="col-xl-12">
            <div class="block block-rounded d-flex flex-column h-100 mb-0">
              <div class="block-content flex-grow-1 d-flex justify-content-between">
                <dl class="mb-0">
                  <dt class="fs-3 fw-bold">264</dt>
                  <dd class="fs-sm fw-medium text-muted mb-0">New Customers</dd>
                </dl>
                <div>
                  <div class="d-inline-block px-2 py-1 rounded-3 fs-xs fw-semibold text-success bg-success-light">
                    <i class="fa fa-caret-up me-1"></i>
                    9.3%
                  </div>
                </div>
              </div>
              <div class="block-content p-1 text-center overflow-hidden">
                <!-- New Customers Chart Container -->
                <canvas id="js-chartjs-new-customers" style="height: 90px;"></canvas>
              </div>
            </div>
          </div>
        </div>
        <!-- END Last 2 Weeks -->
      </div>
    </div>
    <!-- END Statistics -->

    <!-- Recent Orders -->
    <div class="block block-rounded">
      <div class="block-header block-header-default">
        <h3 class="block-title">Recent Orders</h3>
        <div class="block-options space-x-1">
          <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#one-dashboard-search-orders" data-class="d-none">
            <i class="fa fa-search"></i>
          </button>
          <div class="dropdown d-inline-block">
            <button type="button" class="btn btn-sm btn-alt-secondary" id="dropdown-recent-orders-filters" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-fw fa-flask"></i>
              Filters
              <i class="fa fa-angle-down ms-1"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-md dropdown-menu-end fs-sm" aria-labelledby="dropdown-recent-orders-filters">
              <a class="dropdown-item fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
                Pending
                <span class="badge bg-primary rounded-pill">20</span>
              </a>
              <a class="dropdown-item fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
                Active
                <span class="badge bg-primary rounded-pill">72</span>
              </a>
              <a class="dropdown-item fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
                Completed
                <span class="badge bg-primary rounded-pill">890</span>
              </a>
              <a class="dropdown-item fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
                All
                <span class="badge bg-primary rounded-pill">997</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div id="one-dashboard-search-orders" class="block-content border-bottom d-none">
        <!-- Search Form -->
        <form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">
          <div class="push">
            <div class="input-group">
              <input type="text" class="form-control form-control-alt" id="one-ecom-orders-search" name="one-ecom-orders-search" placeholder="Search all orders..">
              <span class="input-group-text bg-body border-0">
                <i class="fa fa-search"></i>
              </span>
            </div>
          </div>
        </form>
        <!-- END Search Form -->
      </div>
      <div class="block-content block-content-full">
        <!-- Recent Orders Table -->
        <div class="table-responsive">
          <table class="table table-hover table-vcenter">
            <thead>
              <tr>
                <th>Order ID</th>
                <th class="d-none d-xl-table-cell">Customer</th>
                <th>Status</th>
                <th class="d-none d-sm-table-cell text-center">Profit</th>
                <th class="d-none d-sm-table-cell text-end">Created</th>
                <th class="d-none d-sm-table-cell text-end">Value</th>
              </tr>
            </thead>
            <tbody class="fs-sm">
              <tr>
                <td>
                  <a class="fw-semibold" href="javascript:void(0)">
                    ORD.00925                  </a>
                  <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Andrea Gardner</a>
                  <p class="fs-sm fw-medium text-muted mb-0">Photographer</p>
                </td>
                <td>
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">Completed</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <div class="progress mb-1" style="height: 5px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 18%;" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="fs-xs fw-semibold mb-0">18%</p>
                </td>
                <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">19 min ago</td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>$2094,65</strong>
                </td>
              </tr>
              <tr>
                <td>
                  <a class="fw-semibold" href="javascript:void(0)">
                    ORD.00924                  </a>
                  <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Alice Moore</a>
                  <p class="fs-sm fw-medium text-muted mb-0">Application Manager</p>
                </td>
                <td>
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">Completed</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <div class="progress mb-1" style="height: 5px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 19%;" aria-valuenow="19" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="fs-xs fw-semibold mb-0">19%</p>
                </td>
                <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">25 min ago</td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>$881,76</strong>
                </td>
              </tr>
              <tr>
                <td>
                  <a class="fw-semibold" href="javascript:void(0)">
                    ORD.00923                  </a>
                  <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Brian Cruz</a>
                  <p class="fs-sm fw-medium text-muted mb-0">Web developer</p>
                </td>
                <td>
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Pending</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <div class="progress mb-1" style="height: 5px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 16%;" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="fs-xs fw-semibold mb-0">16%</p>
                </td>
                <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">3 min ago</td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>$1647,56</strong>
                </td>
              </tr>
              <tr>
                <td>
                  <a class="fw-semibold" href="javascript:void(0)">
                    ORD.00922                  </a>
                  <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Lori Moore</a>
                  <p class="fs-sm fw-medium text-muted mb-0">Web developer</p>
                </td>
                <td>
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Pending</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <div class="progress mb-1" style="height: 5px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 6%;" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="fs-xs fw-semibold mb-0">6%</p>
                </td>
                <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">15 min ago</td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>$1563,85</strong>
                </td>
              </tr>
              <tr>
                <td>
                  <a class="fw-semibold" href="javascript:void(0)">
                    ORD.00921                  </a>
                  <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Jack Greene</a>
                  <p class="fs-sm fw-medium text-muted mb-0">Web developer</p>
                </td>
                <td>
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">Completed</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <div class="progress mb-1" style="height: 5px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 19%;" aria-valuenow="19" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="fs-xs fw-semibold mb-0">19%</p>
                </td>
                <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">2 min ago</td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>$459,64</strong>
                </td>
              </tr>
              <tr>
                <td>
                  <a class="fw-semibold" href="javascript:void(0)">
                    ORD.00920                  </a>
                  <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Lori Grant</a>
                  <p class="fs-sm fw-medium text-muted mb-0">Product Designer</p>
                </td>
                <td>
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Pending</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <div class="progress mb-1" style="height: 5px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 12%;" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="fs-xs fw-semibold mb-0">12%</p>
                </td>
                <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">8 min ago</td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>$2459,46</strong>
                </td>
              </tr>
              <tr>
                <td>
                  <a class="fw-semibold" href="javascript:void(0)">
                    ORD.00919                  </a>
                  <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Lisa Jenkins</a>
                  <p class="fs-sm fw-medium text-muted mb-0">Photographer</p>
                </td>
                <td>
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Active</span>
                </td>
                <td class="d-none d-sm-table-cell">
                  <div class="progress mb-1" style="height: 5px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 24%;" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="fs-xs fw-semibold mb-0">24%</p>
                </td>
                <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">3 min ago</td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>$492,68</strong>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- END Recent Orders Table -->
      </div>
      <div class="block-content block-content-full bg-body-light">
        <!-- Pagination -->
        <nav aria-label="Photos Search Navigation">
          <ul class="pagination pagination-sm justify-content-end mb-0">
            <li class="page-item">
              <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                Prev
              </a>
            </li>
            <li class="page-item active">
              <a class="page-link" href="javascript:void(0)">1</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0)">2</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0)">3</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0)">4</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0)" aria-label="Next">
                Next
              </a>
            </li>
          </ul>
        </nav>
        <!-- END Pagination -->
      </div>
    </div>
    <!-- END Recent Orders -->
