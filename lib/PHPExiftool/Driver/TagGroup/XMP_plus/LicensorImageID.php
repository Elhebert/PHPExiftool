<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_plus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LicensorImageID extends AbstractTagGroup
{
    protected string $id = 'XMP-plus:LicensorImageID';

    protected string $name = 'LicensorImageID';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Licensor Image ID',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PLUS::XMP
             * line : 183640
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'PLUS::XMP.XMP-plus:LicensorImageID',
            'desc' => [
                'en' => 'Licensor Image ID',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
