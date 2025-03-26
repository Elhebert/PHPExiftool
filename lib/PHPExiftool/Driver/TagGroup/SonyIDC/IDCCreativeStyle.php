<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SonyIDC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class IDCCreativeStyle extends AbstractTagGroup
{
    protected string $id = 'SonyIDC:IDCCreativeStyle';

    protected string $name = 'IDCCreativeStyle';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'IDC Creative Style',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : SonyIDC::Main
             * line : 279138
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'SonyIDC::Main.SonyIDC:IDCCreativeStyle',
            'desc' => [
                'en' => 'IDC Creative Style',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
