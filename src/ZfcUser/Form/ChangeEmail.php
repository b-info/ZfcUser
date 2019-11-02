<?php

namespace ZfcUser\Form;

<<<<<<< HEAD
use ZfcBase\Form\ProvidesEventsForm;
use ZfcUser\Options\RegistrationOptionsInterface;
=======
>>>>>>> 03c8d818807e5edf9cdc723a5460d6ed8ce9c550
use ZfcUser\Options\AuthenticationOptionsInterface;

class ChangeEmail extends ProvidesEventsForm
{
    /**
     * @var AuthenticationOptionsInterface
     */
    protected $authOptions;

    public function __construct($name, AuthenticationOptionsInterface $options)
    {
        $this->setAuthenticationOptions($options);

        parent::__construct($name);

        $this->add(array(
            'name' => 'identity',
            'options' => array(
                'label' => '',
            ),
            'attributes' => array(
                'type' => 'hidden',
            ),
        ));

        $this->add(array(
            'name' => 'newIdentity',
            'options' => array(
                'label' => 'New Email',
            ),
            'attributes' => array(
                'type' => 'text',
            ),
        ));

        $this->add(array(
            'name' => 'newIdentityVerify',
            'options' => array(
                'label' => 'Verify New Email',
            ),
            'attributes' => array(
                'type' => 'text',
            ),
        ));

        $this->add(array(
            'name' => 'credential',
            'options' => array(
                'label' => 'Password',
            ),
            'attributes' => array(
                'type' => 'password',
            ),
        ));

<<<<<<< HEAD
        $this->getEventManager()->trigger('init', $this);
=======
        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'value' => 'Submit',
                'type'  => 'submit'
            ),
        ));
>>>>>>> 03c8d818807e5edf9cdc723a5460d6ed8ce9c550
    }

    /**
     * Set Authentication-related Options
     *
     * @param AuthenticationOptionsInterface $authOptions
     * @return ChangeEmail
     */
    public function setAuthenticationOptions(AuthenticationOptionsInterface $authOptions)
    {
        $this->authOptions = $authOptions;

        return $this;
    }

    /**
     * Get Authentication-related Options
     *
     * @return AuthenticationOptionsInterface
     */
    public function getAuthenticationOptions()
    {
        return $this->authOptions;
    }
}
