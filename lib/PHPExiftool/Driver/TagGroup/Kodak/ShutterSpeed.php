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
class ShutterSpeed extends AbstractTagGroup
{
    protected string $id = 'Kodak:ShutterSpeed';

    protected string $name = 'ShutterSpeed';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Shutter Speed',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::TextualInfo
             * line : 109497
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::TextualInfo.Kodak:ShutterSpeed',
            'desc' => [
                'en' => 'Shutter Speed',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
