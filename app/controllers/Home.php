<?php

/**
 * Home
 *
 * @copyright 2017 Phil Thompson
 */
class Home extends BaseController
{
    /**
     * indexAction
     *
     * @return \Illuminate\View\View
     */
    public function indexAction()
    {
        $current_packages = Package::orderBy("size")->get()->toArray();

        return View::make("home.index", ["current_packages" => $current_packages]);
    }

    /**
     * processAction
     *
     * @return \Illuminate\View\View
     */
    public function processAction()
    {
        $packages = Package::orderBy("size")->get()->toArray();

        $post = Input::all();

        $required = $post['required'];

        $result = $this->calculateResult($required, $packages);

        return View::make(
            "home.index",
            [
                "current_packages" => $packages,
                "required" => $required,
                "result" => $result
            ]
        );
    }

    /**
     * calculateResult
     *
     * @param int $required
     * @param array $packages
     * @return array
     */
    protected function calculateResult($required, $packages)
    {
        $options = [];
        $result = [];
        $left = $required;

        foreach ($packages as $package) {
            $options[] = $package['size'];
            $result[$package['size']] = 0;
        }

        $package_count = count($options) - 1;

        if ($left <= $options[1] && $left > 0) {
            if ($left <= $options[0]) {
                $result[$options[0]] += 1;
            } else {
                $result[$options[1]] += 1;
            }
        } else {
            while ($left > 0 && $package_count > 0) {
                while ($left < $options[$package_count]) {
                    $package_count--;
                    if ($package_count < 0) {
                        $package_count = 0;
                        break;
                    }
                }
                $result[$options[$package_count]] += 1;
                $left = $left - $options[$package_count];

                if ($left > 0 && $package_count == 0) {
                    $package_count++;
                }
            }
        }

        return $result;
    }
}
