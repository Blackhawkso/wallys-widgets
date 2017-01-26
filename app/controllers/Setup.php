<?php

/**
 * Setup
 *
 * @copyright 2017 Phil Thompson
 */
class Setup extends BaseController
{
    /**
     * indexAction
     *
     * @return \Illuminate\View\View
     */
    public function indexAction()
    {
        $packages = Package::orderBy("size")->get();

        return View::make("setup.index", ["current_packages" => $packages]);
    }

    /**
     * newAction
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function newAction()
    {
        $input = Input::all();

        $widget_mdl = new Package();

        $package = $widget_mdl->firstOrNew(["size" => $input['add']]);

        $package->setSize($input['add']);
        $package->save();

        return Redirect::route("setup.index");
    }

    /**
     * editAction
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function editAction($id)
    {
        $input = Input::all();

        /** @var \Package $package */
        $package = Package::find($id);

        $package->setSize($input['edit']);
        $package->save();

        return Redirect::route("setup.index");
    }

    /**
     * deleteAction
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws Exception
     */
    public function deleteAction($id)
    {
        /** @var \Package $package */
        $package = Package::find($id);

        $package->delete();

        return Redirect::route("setup.index");
    }
}
