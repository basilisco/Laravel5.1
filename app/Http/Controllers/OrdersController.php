<?php
/**
 * Created by PhpStorm.
 * User: paulo
 * Date: 03/11/15
 * Time: 09:52
 */

namespace CodeDelivery\Http\Controllers;


use CodeDelivery\Repositories\OrderRepository;
use CodeDelivery\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class OrdersController extends Controller
{

    /**
     * @var OrderRepository
     */
    private $Repository;
    /**
     * @var OrderRepository
     */
    private $repository;

    public function __construct(OrderRepository $repository)
    {


        $this->repository = $repository;
    }

    public function index()
    {
        $orders = $this->repository->paginate();

        return view('admin.orders.index', compact('orders'));
    }

    public function edit($id, UserRepository $userRepository)
    {
        $list_status = [
            0=>'Pendente',
            1=>'A caminho',
            2=>'Entregue'
        ];

        $deliveryman = $userRepository->getDeliveryman();

        $order = $this->repository->find($id);
        return view('admin.orders.edit', compact('order','list_status', 'deliveryman'));
    }

    public function update(Request $request, $id)
    {
        $all = $request->all();
        $this->Repository->update($all, $id);

        return redirect('admin.orders.index');
    }

}