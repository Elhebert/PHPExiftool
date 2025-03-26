<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Frame extends AbstractTagGroup
{
    protected string $id = 'MNG:Frame';

    protected string $name = 'Frame';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Frame',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MNG::Main
             * line : 112298
             * type : ?
             * writable : false
             * count :
             * flags : binary
             */
            'id' => 'MNG::Main.MNG:Frame',
            'desc' => [
                'en' => 'Frame',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2;
}
