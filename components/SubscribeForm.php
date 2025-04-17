<?php namespace Acme\Newsletter\Components;

use Cms\Classes\ComponentBase;
use Acme\Newsletter\Models\Subscriber;
use Flash;
use Validator;
use ValidationException;

class SubscribeForm extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Subscribe Form',
            'description' => 'Form per iscrizione alla newsletter'
        ];
    }

    public function onSubscribe()
    {
        $data = post();

        $rules = ['email' => 'required|email|unique:acme_newsletter_subscribers'];

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        $subscriber = new Subscriber();
        $subscriber->email = $data['email'];
        $subscriber->save();

        Flash::success('Grazie per esserti iscritto!');
    }
}
