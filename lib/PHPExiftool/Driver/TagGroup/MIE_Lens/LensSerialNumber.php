<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIE_Lens;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LensSerialNumber extends AbstractTagGroup
{
    protected string $id = 'MIE-Lens:LensSerialNumber';

    protected string $name = 'LensSerialNumber';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Lens Serial Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MIE::Lens
             * line : 111567
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'MIE::Lens.MIE-Lens:LensSerialNumber',
            'desc' => [
                'en' => 'Lens Serial Number',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
