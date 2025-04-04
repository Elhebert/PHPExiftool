<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DICOM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OrderCallbackPhoneNumber extends AbstractTagGroup
{
    protected string $id = 'DICOM:OrderCallbackPhoneNumber';

    protected string $name = 'OrderCallbackPhoneNumber';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Order Callback Phone Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 73110
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:OrderCallbackPhoneNumber',
            'desc' => [
                'en' => 'Order Callback Phone Number',
            ],
        ],
    ];

    protected int $count = 0;
}
