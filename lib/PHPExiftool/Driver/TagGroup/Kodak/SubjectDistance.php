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
class SubjectDistance extends AbstractTagGroup
{
    protected string $id = 'Kodak:SubjectDistance';

    protected string $name = 'SubjectDistance';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Subject Distance',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::Main
             * line : 108770
             * type : int16u
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Kodak::Main.Kodak:SubjectDistance',
            'desc' => [
                'en' => 'Subject Distance',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
