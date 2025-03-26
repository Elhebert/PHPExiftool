<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MyColorMode extends AbstractTagGroup
{
    protected string $id = 'Canon:MyColorMode';

    protected string $name = 'MyColorMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'My Color Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::MyColors
             * line : 50846
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::MyColors.Canon:MyColorMode',
            'desc' => [
                'en' => 'My Color Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
