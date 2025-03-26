<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class IPFCameraModel extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:IPFCameraModel';

    protected string $name = 'IPFCameraModel';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'IPF Camera Model',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 107764
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:IPFCameraModel',
            'desc' => [
                'en' => 'IPF Camera Model',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
