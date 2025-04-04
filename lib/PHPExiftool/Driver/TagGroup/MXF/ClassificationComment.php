<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ClassificationComment extends AbstractTagGroup
{
    protected string $id = 'MXF:ClassificationComment';

    protected string $name = 'ClassificationComment';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Classification Comment',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 116319
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:ClassificationComment',
            'desc' => [
                'en' => 'Classification Comment',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 118204
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:ClassificationComment',
            'desc' => [
                'en' => 'Classification Comment',
            ],
        ],
    ];

    protected int $count = 0;
}
