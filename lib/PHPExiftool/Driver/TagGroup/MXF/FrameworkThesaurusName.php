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
class FrameworkThesaurusName extends AbstractTagGroup
{
    protected string $id = 'MXF:FrameworkThesaurusName';

    protected string $name = 'FrameworkThesaurusName';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Framework Thesaurus Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 117336
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:FrameworkThesaurusName',
            'desc' => [
                'en' => 'Framework Thesaurus Name',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 117339
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:FrameworkThesaurusName',
            'desc' => [
                'en' => 'Framework Thesaurus Name',
            ],
        ],
    ];

    protected int $count = 0;
}
