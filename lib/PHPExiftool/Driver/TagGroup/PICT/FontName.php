<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PICT;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FontName extends AbstractTagGroup
{
    protected string $id = 'PICT:FontName';

    protected string $name = 'FontName';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Font Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PICT::Main
             * line : 182981
             * type : FontName
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PICT::Main.PICT:FontName',
            'desc' => [
                'en' => 'Font Name',
            ],
        ],
    ];

    protected int $count = 0;
}
