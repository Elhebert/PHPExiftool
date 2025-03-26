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
class FractionalChannelDisplayScale extends AbstractTagGroup
{
    protected string $id = 'DICOM:FractionalChannelDisplayScale';

    protected string $name = 'FractionalChannelDisplayScale';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Fractional Channel Display Scale',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DICOM::Main
             * line : 72774
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DICOM::Main.DICOM:FractionalChannelDisplayScale',
            'desc' => [
                'en' => 'Fractional Channel Display Scale',
            ],
        ],
    ];

    protected int $count = 0;
}
