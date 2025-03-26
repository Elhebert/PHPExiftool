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
class LanguageCode extends AbstractTagGroup
{
    protected string $id = 'EXE:LanguageCode';

    protected string $name = 'LanguageCode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : EXE::CHM
             * line : 107554
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'EXE::CHM.EXE:LanguageCode',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : EXE::PEString
             * line : 109120
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'EXE::PEString.EXE:LanguageCode',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
