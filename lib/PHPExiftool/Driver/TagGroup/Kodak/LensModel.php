<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LensModel extends AbstractTagGroup
{
    protected string $id = 'Kodak:LensModel';

    protected string $name = 'LensModel';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Lens Model',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::Type11
             * line : 109564
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Type11.Kodak:LensModel',
            'desc' => [
                'en' => 'Lens Model',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
