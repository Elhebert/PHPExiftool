<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Photoshop;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CopyrightFlag extends AbstractTagGroup
{
    protected string $id = 'Photoshop:CopyrightFlag';

    protected string $name = 'CopyrightFlag';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Copyright Flag',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Photoshop::Main
             * line : 212278
             * type : int8u
             * writable : true
             * count :
             * flags :
             */
            'id' => 'Photoshop::Main.Photoshop:CopyrightFlag',
            'desc' => [
                'en' => 'Copyright Flag',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
