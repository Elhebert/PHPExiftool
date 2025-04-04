<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\EXE;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PEType extends AbstractTagGroup
{
    protected string $id = 'EXE:PEType';

    protected string $name = 'PEType';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'PE Type',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : EXE::Main
             * line : 80473
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'EXE::Main.EXE:PEType',
            'desc' => [
                'en' => 'PE Type',
            ],
        ],
    ];

    protected int $count = 0;
}
